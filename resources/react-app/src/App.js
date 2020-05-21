import React from 'react';
import { Switch, Route } from 'react-router-dom';
import { connect } from 'react-redux';

import ShopPage from './pages/shop/shop.component';

import './App.scss';

class App extends React.Component {
   render() {
      return (
         <div className="App">
            <Switch>
               <Route exact path="/shop" component={ShopPage} />
            </Switch>
         </div>
      );
   }
}

export default connect()(App);
