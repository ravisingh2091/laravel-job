<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Commodity
 *
 */
	class Commodity extends \Eloquent {}
}

namespace App{
/**
 * App\Enrollment
 *
 * @property-read \App\Zip $billingZip
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\EnrollmentLog[] $logs
 * @property-read \App\EnrollmentPayload $payload
 * @property-read \App\Product $product
 * @property-read \App\Zip $serviceZip
 */
	class Enrollment extends \Eloquent {}
}

namespace App{
/**
 * App\EnrollmentLog
 *
 * @property-read \App\Enrollment $enrollment
 */
	class EnrollmentLog extends \Eloquent {}
}

namespace App{
/**
 * Created by PhpStorm.
 * 
 * User: joelc
 * Date: 1/3/2017
 * Time: 12:35 AM
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Enrollment[] $enrollments
 */
	class EnrollmentPayload extends \Eloquent {}
}

namespace App{
/**
 * App\Product
 *
 * @property-read \App\Commodity $commodity
 * @property-read \App\Product $nextProduct
 * @property-read \App\ProductType $productType
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\ProductTerms[] $termsOfService
 * @property-read \App\UtilityTerritory $utilityTerritory
 */
	class Product extends \Eloquent {}
}

namespace App{
/**
 * App\ProductTerms
 *
 * @property-read \App\Product $product
 */
	class ProductTerms extends \Eloquent {}
}

namespace App{
/**
 * App\ProductType
 *
 */
	class ProductType extends \Eloquent {}
}

namespace App{
/**
 * App\Role
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $users
 */
	class Role extends \Eloquent {}
}

namespace App{
/**
 * App\State
 *
 */
	class State extends \Eloquent {}
}

namespace App{
/**
 * App\StateDocumentUrl
 *
 */
	class StateDocumentUrl extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Role[] $roles
 */
	class User extends \Eloquent {}
}

namespace App{
/**
 * App\UserRole
 *
 * @property-read \App\Role $role
 * @property-read \App\User $user
 */
	class UserRole extends \Eloquent {}
}

namespace App{
/**
 * App\Utility
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\UtilityTerritory[] $territories
 */
	class Utility extends \Eloquent {}
}

namespace App{
/**
 * App\UtilityTerritory
 *
 * @property-read \App\Commodity $commodity
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\UtilityTerritoryDocumentUrl[] $documentUrls
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\UtilityTerritoryTerms[] $termsOfSerice
 * @property-read \App\Utility $utility
 */
	class UtilityTerritory extends \Eloquent {}
}

namespace App{
/**
 * App\UtilityTerritoryDocumentUrl
 *
 * @property-read \App\UtilityTerritory $utilityTerritory
 */
	class UtilityTerritoryDocumentUrl extends \Eloquent {}
}

namespace App{
/**
 * App\UtilityTerritoryTerms
 *
 * @property-read \App\UtilityTerritory $utilityTerritory
 */
	class UtilityTerritoryTerms extends \Eloquent {}
}

namespace App{
/**
 * App\UtilityTerritoryZip
 *
 * @property-read \App\UtilityTerritory $utilityTerritory
 * @property-read \App\Zip $zip
 */
	class UtilityTerritoryZip extends \Eloquent {}
}

namespace App{
/**
 * App\Zip
 *
 * @property-read \App\State $state
 */
	class Zip extends \Eloquent {}
}

