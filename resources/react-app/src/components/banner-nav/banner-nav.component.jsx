import React from "react";

import "./banner-nav.styles.scss";

const BannerNav = (props) => {
   return (
      <nav id="banner-nav">
         <span className="arrow-left"></span>
         <span className="arrow-right"></span>
         <span className="line"></span>
         <span className="pagination">
            <span className="index">{props.index}</span> / <span className="total">{props.total}</span>
         </span>
      </nav>
   );
};

export default BannerNav;
