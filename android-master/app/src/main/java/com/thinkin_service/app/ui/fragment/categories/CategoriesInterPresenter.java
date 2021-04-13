package com.thinkin_service.app.ui.fragment.categories;

import com.thinkin_service.app.base.MvpPresenter;
import com.thinkin_service.app.ui.fragment.book_ride.BookRideIView;

import java.util.HashMap;


public interface CategoriesInterPresenter<V extends CategoriesView> extends MvpPresenter<V> {


    void getCategories();

    void getBanners();

    void checkStatus();

    void getUserInfo();


    void logout(String id);

    void getNavigationSettings();


}
