package com.thinkin_service.app.data.network.model;

import android.os.Parcel;
import android.os.Parcelable;

import com.google.gson.annotations.Expose;
import com.google.gson.annotations.SerializedName;

import java.util.ArrayList;
import java.util.List;

public class ChildRecursive implements Parcelable {
    @SerializedName("id")
    @Expose
    private Integer id;
    @SerializedName("parent_id")
    @Expose
    private Integer parentId;
    @SerializedName("agent_id")
    @Expose
    private Integer agentId;
    @SerializedName("name")
    @Expose
    private String name;
    @SerializedName("provider_name")
    @Expose
    private String providerName;
    @SerializedName("image")
    @Expose
    private String image;
    @SerializedName("marker")
    @Expose
    private String marker;
    @SerializedName("fixed")
    @Expose
    private Integer fixed;
    @SerializedName("price")
    @Expose
    private Integer price;
    @SerializedName("type_price")
    @Expose
    private Integer typePrice;
    @SerializedName("calculator")
    @Expose
    private String calculator;
    @SerializedName("description")
    @Expose
    private String description;

    @SerializedName("status")
    @Expose
    private Integer status;
    @SerializedName("children_recursive")
    @Expose
    private List<ChildRecursive> childrenRecursive = null;

    public Integer getId() {
        return id;
    }

    public void setId(Integer id) {
        this.id = id;
    }

    public Integer getParentId() {
        return parentId;
    }

    public void setParentId(Integer parentId) {
        this.parentId = parentId;
    }

    public Integer getAgentId() {
        return agentId;
    }

    public void setAgentId(Integer agentId) {
        this.agentId = agentId;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getProviderName() {
        return providerName;
    }

    public void setProviderName(String providerName) {
        this.providerName = providerName;
    }

    public String getImage() {
        return image;
    }

    public void setImage(String image) {
        this.image = image;
    }

    public String getMarker() {
        return marker;
    }

    public void setMarker(String marker) {
        this.marker = marker;
    }

    public Integer getFixed() {
        return fixed;
    }

    public void setFixed(Integer fixed) {
        this.fixed = fixed;
    }

    public Integer getPrice() {
        return price;
    }

    public void setPrice(Integer price) {
        this.price = price;
    }

    public Integer getTypePrice() {
        return typePrice;
    }

    public void setTypePrice(Integer typePrice) {
        this.typePrice = typePrice;
    }

    public String getCalculator() {
        return calculator;
    }

    public void setCalculator(String calculator) {
        this.calculator = calculator;
    }



    public Integer getStatus() {
        return status;
    }

    public void setStatus(Integer status) {
        this.status = status;
    }

    public List<ChildRecursive> getChildrenRecursive() {
        return childrenRecursive;
    }

    public void setChildrenRecursive(List<ChildRecursive> childrenRecursive) {
        this.childrenRecursive = childrenRecursive;
    }

    public String getDescription() {
        return description;
    }

    @Override
    public int describeContents() {
        return 0;
    }

    @Override
    public void writeToParcel(Parcel dest, int flags) {
        dest.writeValue(this.id);
        dest.writeValue(this.parentId);
        dest.writeValue(this.agentId);
        dest.writeString(this.name);
        dest.writeString(this.providerName);
        dest.writeString(this.image);
        dest.writeString(this.marker);
        dest.writeValue(this.fixed);
        dest.writeValue(this.price);
        dest.writeValue(this.typePrice);
        dest.writeString(this.calculator);
        dest.writeString(this.description);
        dest.writeValue(this.status);
        dest.writeList(this.childrenRecursive);
    }

    public ChildRecursive() {
    }

    protected ChildRecursive(Parcel in) {
        this.id = (Integer) in.readValue(Integer.class.getClassLoader());
        this.parentId = (Integer) in.readValue(Integer.class.getClassLoader());
        this.agentId = (Integer) in.readValue(Integer.class.getClassLoader());
        this.name = in.readString();
        this.providerName = in.readString();
        this.image = in.readString();
        this.marker = in.readString();
        this.fixed = (Integer) in.readValue(Integer.class.getClassLoader());
        this.price = (Integer) in.readValue(Integer.class.getClassLoader());
        this.typePrice = (Integer) in.readValue(Integer.class.getClassLoader());
        this.calculator = in.readString();
        this.description = in.readString();
        this.status = (Integer) in.readValue(Integer.class.getClassLoader());
        this.childrenRecursive = new ArrayList<ChildRecursive>();
        in.readList(this.childrenRecursive, ChildRecursive.class.getClassLoader());
    }

    public static final Parcelable.Creator<ChildRecursive> CREATOR = new Parcelable.Creator<ChildRecursive>() {
        @Override
        public ChildRecursive createFromParcel(Parcel source) {
            return new ChildRecursive(source);
        }

        @Override
        public ChildRecursive[] newArray(int size) {
            return new ChildRecursive[size];
        }
    };
}