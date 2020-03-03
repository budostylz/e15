# Project 2
+ By: *Shaun Lewis*
+ Production URL: <http://e15p2.budoapps.com/>
+ Project Synopsis: Form where users select a bar and order drinks.

## Outside resources

[PhP Documentation](https://www.php.net/docs.php)

[Sass: CSS with superpowers](https://sass-lang.com/)

[CSS Grid Layout Module](https://www.w3schools.com/css/css_grid.asp)

[jQuery](https://jquery.com/)

## Notes for instructor
Applied Sass and CSS Grid Layout for improved styles. Applied jQuery for improved interactivity.

##--------------------------------------THIS SECTION WILL BE OMITTED FOR FINAL BUILD----------------------------------------------------------------

## Model, View, Controller Outline

1. Model: Google Places JavaScript API. Bars and Drinks entities(raw JSON data which sends to server for processing).

2. View: OrderView and ConfirmationView. 
        OrderView will be the view for users to find a bar and order drinks.
        ConfirmationView will be the view for order confirmation.

3. Controller: BarController
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




