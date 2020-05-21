import { combineReducers } from "redux";
import { persistReducer } from "redux-persist";
import storage from "redux-persist/lib/storage";
import { connectRouter } from "connected-react-router";

import { shopReducer } from "./shop/shop.reducer";

const persistConfig = {
   key: "root",
   storage,
};

export default (history) =>
   persistReducer(
      persistConfig,
      combineReducers({
         router: connectRouter(history),
         shop: shopReducer,
      })
   );
