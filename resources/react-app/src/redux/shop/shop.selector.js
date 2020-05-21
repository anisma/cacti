import { createSelector } from 'reselect';

export const getShopItems = (state) => state.shop.items;

export const getPreviewCollections = createSelector(getShopItems, (shopItems) =>
   Object.keys(shopItems).map((key) => ({
      ...shopItems[key],
      items: shopItems[key].items,
   }))
);
