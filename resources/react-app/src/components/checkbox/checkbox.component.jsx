import React from "react";

const Checkbox = (props) => {
   return (
      <div className="checkbox">
         <input name={props.name} id={props.name} type="checkbox" value={props.id} />
         <span className="check-mark"></span>
         <label htmlFor={props.name}>{props.name} </label>
      </div>
   );
};

export default Checkbox;
