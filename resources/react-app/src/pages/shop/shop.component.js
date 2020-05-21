import React from "react";
import ReactDOM from "react-dom";
import axios from "axios";

import CardList from "../../components/card-list/card-list.component";
import FilterGroup from "../../components/filter-group/filter-group.component";

import "./shop.styles.scss";

class ShopPage extends React.Component {
   constructor(props) {
      super(props);
      this.state = {
         products: [],
         genus: [],
         size: [],
         color: [],
      };
   }

   componentDidMount() {
      axios.get(`api/products`).then((res) => {
         const products = res.data;
         this.setState({ products });
      });
      axios.get(`api/genus`).then((res) => {
         const genus = res.data;
         this.setState({ genus });
      });
      axios.get(`api/size`).then((res) => {
         const size = res.data;
         this.setState({ size });
      });
      axios.get(`api/color`).then((res) => {
         const color = res.data;
         this.setState({ color });
      });
   }
   render() {
      const { products, genus, size, color } = this.state;
      return (
         <div className="wrapper shop-page">
            <div className="filter">
               <h4 className="filter-title">Filters</h4>
               <FilterGroup filters={genus}>Genus</FilterGroup>
               <FilterGroup filters={size}>Size</FilterGroup>
               <FilterGroup filters={color}>Color</FilterGroup>
            </div>
            <div className="shop-wrapper">
               <h3 className="shop-title">Plants</h3>
               <div className="sortby">
                  <div className="main-sortby">
                     <select id="sort">
                        <option value="featured">Featured</option>
                        <option value="newest">Newest</option>
                        <option value="oldest">Oldest</option>
                        <option value="hi-price">Highest Price</option>
                        <option value="lo-price">Lower Price</option>
                     </select>
                  </div>
               </div>
               <CardList products={products} />
            </div>
         </div>
      );
   }
}

export default ShopPage;
