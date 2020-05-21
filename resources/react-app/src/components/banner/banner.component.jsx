import React from "react";

import BannerNav from "../banner-nav/banner-nav.component";

import "./banner.styles.scss";

const Banner = (props) => {
   return (
      <div className="banner" id="{{ $id }}">
         <img className="image" src="{{ $image }}" alt="" />
         <div className="wrapper">
            <div className="content-wrapper">
               <h1 className="hero-title">{{ $title }}</h1>
               <p className="hero-text">{props.children}</p>
               <span to="/shop/" className="button">
                  shop now
               </span>
               <BannerNav index={index} total="$total" />
            </div>
         </div>
      </div>
   );
};

export default Banner;
