import React from "react";

import Checkbox from "../checkbox/checkbox.component";

const FilterGroup = (props) => {
   return (
      <div className="filter-group">
         <h5 className="title">{props.children}</h5>
         {props.filters.map((filter) => (
            <Checkbox key={filter.id} {...filter} />
         ))}
      </div>
   );
};

export default FilterGroup;
