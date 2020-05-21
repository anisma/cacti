import React from 'react'

import Card from '../card/card.component'

const CardList = (props) => {
   return (
      <div className='card-list'>
         {props.products.map((product) => (
            <Card key={product.id} {...product} />
         ))}
      </div>
   );
}

export default CardList
