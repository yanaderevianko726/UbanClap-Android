package com.thinkin_service.app.ui.adapter;

import android.content.Context;
import android.graphics.Typeface;
import android.support.annotation.NonNull;
import android.support.v7.widget.RecyclerView;
import android.text.style.CharacterStyle;
import android.text.style.StyleSpan;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Filter;
import android.widget.Filterable;
import android.widget.TextView;

import com.google.android.gms.maps.model.LatLngBounds;
import com.google.android.libraries.places.api.model.AutocompletePrediction;
import com.google.android.libraries.places.api.model.AutocompleteSessionToken;
import com.google.android.libraries.places.api.model.RectangularBounds;
import com.google.android.libraries.places.api.net.FindAutocompletePredictionsRequest;
import com.google.android.libraries.places.api.net.PlacesClient;
import com.google.maps.android.SphericalUtil;
import com.thinkin_service.app.R;

import java.util.ArrayList;
import java.util.Objects;

public class PlacesAutoCompleteAdapter extends RecyclerView.Adapter<PlacesAutoCompleteAdapter.PredictionHolder> implements Filterable {

    private static final String TAG = "PlacesAutoAdapter";
    private final PlacesClient mPlacesClient;
    //Todo Miguel Changing ArrayList Param
    private ArrayList<PlaceAutocomplete> mResultList = new ArrayList<>();
    private LatLngBounds mBounds;
    private Context mContext;
    private int layout;
    private CharacterStyle STYLE_BOLD;
    private CharacterStyle STYLE_NORMAL;
    private static double radius = 5000;

    public PlacesAutoCompleteAdapter(Context context, int resource, PlacesClient placesClient, LatLngBounds bounds) {
        mContext = context;
        layout = resource;
        mBounds = bounds;
        mPlacesClient = placesClient;
        STYLE_BOLD = new StyleSpan(Typeface.BOLD);
        STYLE_NORMAL = new StyleSpan(Typeface.NORMAL);
    }

    public void setBounds(LatLngBounds bounds) {
        mBounds = bounds;
    }

    /**
     * Recupera lista de predicoes a partir de uma palavra e atualiza na lista
     *
     * @param query        Texto do autocomplete
     * @param sessionToken Token de sessao para chamadas ao autocomplete sairem de graca caso o mesmo
     *                     token seja finalizado com uma chamada de place details
     */
    public void getAutoCompletePredictions(String query, AutocompleteSessionToken sessionToken) {
        if (query == null || query.trim().isEmpty()) return;

        LatLngBounds bounds = new LatLngBounds.Builder().
                include(SphericalUtil.computeOffset(mBounds.getCenter(), radius, 0)).
                include(SphericalUtil.computeOffset(mBounds.getCenter(), radius, 90)).
                include(SphericalUtil.computeOffset(mBounds.getCenter(), radius, 180)).
                include(SphericalUtil.computeOffset(mBounds.getCenter(), radius, 270)).build();

        FindAutocompletePredictionsRequest request = FindAutocompletePredictionsRequest.builder()
                //.setCountry("br")
                .setSessionToken(sessionToken)
                .setQuery(query)
                .setLocationBias(RectangularBounds.newInstance(bounds))
                .build();

        mPlacesClient.findAutocompletePredictions(request).addOnSuccessListener(response -> {

            if (response.getAutocompletePredictions().isEmpty()) return;

            ArrayList<PlaceAutocomplete> placesResult = new ArrayList<>();
            PlaceAutocomplete placeAutocomplete;

            for (AutocompletePrediction place : response.getAutocompletePredictions()) {
                placeAutocomplete = new PlaceAutocomplete(
                        place.getPlaceId(),
                        place.getPrimaryText(STYLE_NORMAL),
                        place.getFullText(STYLE_BOLD)
                );
                placesResult.add(placeAutocomplete);
            }

            // Atualiza lista de predicoes

//            LonLat myHouse = /* whatever */ ;
//            Comparable comp = new Comparable () {
//                LonLat a;
//                int compareTo (Object b) {
//                    int aDist = calcDistance(a, myHouse) ;
//                    int bDist = calcDistance(b, myHouse) ;
//                    return aDist - bDist;
//                }
//            };
//            myLonLatList.sort(lonLatList, comp);
//
//            Collections.sort(placesResult, (latlng1, latlng2) ->
//
//
//
//            );

            mResultList = placesResult;
            notifyDataSetChanged();
            Log.i("[AUTOCOMPLETE]", "Found " + placesResult.size() + " results for: " + query);

        }).addOnFailureListener(e -> Log.e("[AUTOCOMPLETE]", e.getMessage()));

    }

    /*
    private ArrayList getAutocomplete(CharSequence constraint) {
        if (mGoogleApiClient.isConnected()) {
            Log.i("", "Starting autocomplete query for: " + constraint);

            // Submit the query to the autocomplete API and retrieve a PendingResult that will
            // contain the results when the query completes.
            PendingResult<AutocompletePredictionBuffer> results = Places
                    .GeoDataApi.getAutocompletePredictions(mGoogleApiClient, constraint.toString(),
                            mBounds, mPlaceFilter);

            // This method should have been called off the main UI thread. Block and wait for at most 60s
            // for a result from the API.
            AutocompletePredictionBuffer autocompletePredictions = results
                    .await(30, TimeUnit.SECONDS);

            // Confirm that the query completed successfully, otherwise return null
            final Status status = autocompletePredictions.getStatus();
            if (!status.isSuccess()) {
                Log.e("", "Error getting autocomplete prediction API call: " + status.toString());
                autocompletePredictions.release();
                return null;
            }

            Log.i(TAG, "Query completed. Received " + autocompletePredictions.getCount()
                    + " predictions.");

            // Copy the results into our own data structure, because we can't hold onto the buffer.
            // AutocompletePrediction objects encapsulate the API response (place ID and description).

            Iterator<AutocompletePrediction> iterator = autocompletePredictions.iterator();
            ArrayList resultList = new ArrayList<>(autocompletePredictions.getCount());
            while (iterator.hasNext()) {
                AutocompletePrediction prediction = iterator.next();
                // Get the details of this prediction and copy it into a new PlaceAutocomplete object.
                resultList.add(new PlaceAutocomplete(prediction.getPlaceId(), prediction.getPrimaryText(STYLE_NORMAL),
                        prediction.getFullText(STYLE_BOLD)));
            }

            // Release the buffer now that all data has been copied.
            autocompletePredictions.release();

            return resultList;
        }
        Log.e(TAG, "Google API client is not connected for autocomplete query.");
        return null;
    }
*/
    @NonNull
    @Override
    public PredictionHolder onCreateViewHolder(@NonNull ViewGroup viewGroup, int i) {
        LayoutInflater layoutInflater = (LayoutInflater) mContext.getSystemService(Context.LAYOUT_INFLATER_SERVICE);
        View convertView = Objects.requireNonNull(layoutInflater).inflate(layout, viewGroup, false);
        return new PredictionHolder(convertView);
    }

    @Override
    public void onBindViewHolder(@NonNull PredictionHolder mPredictionHolder, final int i) {
        mPredictionHolder.area.setText(mResultList.get(i).area);
        mPredictionHolder.address.setText(mResultList.get(i).address.toString()
                .replace(mResultList.get(i).area + ", ", ""));
    }

    @Override
    public int getItemCount() {
        return (mResultList == null) ? 0 : mResultList.size();
    }

    public PlaceAutocomplete getItem(int position) {
        return mResultList.get(position);
    }

    @Override
    public Filter getFilter() {
        return null;
    }

    class PredictionHolder extends RecyclerView.ViewHolder {

        private TextView address, area;

        PredictionHolder(View itemView) {
            super(itemView);
            area = itemView.findViewById(R.id.area);
            address = itemView.findViewById(R.id.address);
        }
    }

    public class PlaceAutocomplete {

        public CharSequence placeId;
        public CharSequence address, area;

        PlaceAutocomplete(CharSequence placeId, CharSequence area, CharSequence address) {
            this.placeId = placeId;
            this.area = area;
            this.address = address;
        }

        @Override
        public String toString() {
            return area.toString();
        }
    }
}
