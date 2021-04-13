package com.thinkin_service.app.data.network.model;

import com.google.gson.annotations.Expose;
import com.google.gson.annotations.SerializedName;

import java.util.List;

public class CatageoriesMain {


    @SerializedName("serviceTypes")
    @Expose
    private List<ServiceType> serviceTypes = null;
    @SerializedName("referral")
    @Expose
    private Referral referral;

    public List<ServiceType> getServiceTypes() {
        return serviceTypes;
    }

    public void setServiceTypes(List<ServiceType> serviceTypes) {
        this.serviceTypes = serviceTypes;
    }

    public Referral getReferral() {
        return referral;
    }

    public void setReferral(Referral referral) {
        this.referral = referral;
    }




}
