package tech.inception.image_upload;

import android.app.Application;
import android.content.Context;
import android.text.TextUtils;

import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.toolbox.ImageLoader;
import com.android.volley.toolbox.Volley;

public class AppController  {



    private RequestQueue mRequestQueue;


    private Context mInstance;



    public  AppController (Context c) {

        mInstance = c;
    }

    public RequestQueue getRequestQueue() {
        if (mRequestQueue == null) {
            mRequestQueue = Volley.newRequestQueue(mInstance);
        }

        return mRequestQueue;
    }



    public <T> void addToRequestQueue(Request<T> req) {
        req.setTag("");
        getRequestQueue().add(req);
    }


}