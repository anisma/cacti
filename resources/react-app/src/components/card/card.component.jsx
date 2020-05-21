import React from 'react'

class Card extends React.Component {
   constructor(props) {
      super(props)
      this.state = {
         hidden: 0,
      }
   }

   mouseoverEventHandle = (event) => {
      this.setState({
         hidden: 1,
      });
     
   }

   mouseoutEventHandle = (event) => {
      this.setState({
         hidden: 0,
      });
      
   }
   render() {
      const { hidden } = this.state
      const { ...props } = this.props
      return (
         <div className='card' onMouseOver={this.mouseoverEventHandle} onMouseOut={this.mouseoutEventHandle}>
            <div className='image-container'>
               <img src={`/img/${props.images[0]['image_path']}`} alt='product name' />
               <div className='view-details' style={{ opacity: hidden ? 1 : 0 }}>
                  <a href={`{{ route('shop.show',['product' => '${props.id}']) }}`}>
                     <span className='button secondary-button'>View Details</span>
                  </a>
               </div>
            </div>
            <p className='title'>{props.name}</p>
            <p className='price'>Rp {props.price}</p>
         </div>
      )
   }
}

export default Card
