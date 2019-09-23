Lavalite package that provides ecommerce management facility for the cms.

## Installation

Begin by installing this package through Composer. Edit your project's `composer.json` file to require `laraecart/ecommerce`.

    "laraecart/ecommerce": "dev-master"

Next, update Composer from the Terminal:

    composer update

Once this operation completes execute below cammnds in command line to finalize installation.

    Laraecart\Ecommerce\Providers\EcommerceServiceProvider::class,

And also add it to alias

    'Ecommerce'  => Laraecart\Ecommerce\Facades\Ecommerce::class,

## Publishing files and migraiting database.

**Migration and seeds**

    php artisan migrate
    php artisan db:seed --class=Laraecart\\EcommerceTableSeeder

**Publishing configuration**

    php artisan vendor:publish --provider="Laraecart\Ecommerce\Providers\EcommerceServiceProvider" --tag="config"

**Publishing language**

    php artisan vendor:publish --provider="Laraecart\Ecommerce\Providers\EcommerceServiceProvider" --tag="lang"

**Publishing views**

    php artisan vendor:publish --provider="Laraecart\Ecommerce\Providers\EcommerceServiceProvider" --tag="view"


## Usage


