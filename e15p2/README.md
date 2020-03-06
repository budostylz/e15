# Project 2
+ By: *Shaun Lewis*
+ Production URL: <http://e15p2.budoapps.com/>
+ Project Synopsis: Form where users select a bar and order drinks.

## Outside resources

[Places Search](https://developers.google.com/maps/documentation/javascript/examples/place-search)

[Laravel API Tutorial: How to Build and Test a RESTful API](https://www.toptal.com/laravel/restful-laravel-api-tutorial)

[How to create simple REST api in laravel 5?](https://medium.com/oceanize-geeks/how-to-create-simple-rest-api-in-laravel-5-d6f6f79a78dd)

[The Cocktail DB](https://www.thecocktaildb.com/api.php)

## Notes for instructor
Applied Sass and CSS Grid Layout for improved styles. Applied jQuery for improved interactivity.

# THIS SECTION WILL BE OMITTED FOR FINAL BUILD

## [How to get data for menu and product listings from Google Places API?](https://stackoverflow.com/questions/52711117/how-to-get-data-for-menu-and-product-listings-from-google-places-api)

## [Quickstart: Setup the Vision API](https://cloud.google.com/vision/docs/setup)

## Model, View, Controller Outline

1. Model: Google Places JavaScript API. 

                Bars and Drinks entities(raw JSON data which sends to server for processing).

2. View: OrderView and ConfirmationView. 

                OrderView will be the view for users to find a bar and order drinks.
                ConfirmationView will be the view for order confirmation.

3. Controllers: 

               BarController
                Action: GetBar(): Get selected Bar Name and returns an image of the bar.
                    Inputs(BarName), Outputs(BarImage)
               
               DrinkController
                Action: GetDrink(): Get selected drink name and returns an image of the drink.
                    Inputs(DrinkName), Outputs(DrinkImage)

               UserDrinkCache
                Action: GetUserDrinks(): Get collection of user drinks, quantity of drink type, calculates total drink price.
                    Inputs(UserDrinkCollection), Outputs(UserDrinkCacheCollection)

               ToGoOrderController
                Action: Checks if the drink order is a to-go order.
                    Inputs(ToGoOrder), Output(void)

               Bartender Controller
                Action: Get bartender data and returns collection of available bartenders.
                    Inputs(none), Output(BartenderCollection)




