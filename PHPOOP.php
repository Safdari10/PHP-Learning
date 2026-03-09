<!-- PHP OOP basics -->

// 1. Basic Class

class User {
    public $name;
    public $email;

    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function getInfo() {
        return $this->name . " - " . $this->email;
    }
}

// important concepts 
// public: here means that the property or method can be accessed from anywhere, both inside and outside the class. It is the most permissive access level.
// $this->property: this is used to refer to the current instance of the class. It allows you to access the properties and methods of the class from within its own methods.
// __construct: this is a special method called a constructor. It is automatically called when an instance of the class is created. It is typically used to initialize the properties of the class with values provided when creating an object.
// public function getInfo(): string { ... }: this is a public method that returns a string. It is used to get information about the user, such as their name and email.
// $this->name: this is used to access the name property of the user object.
// $this->email: this is used to access the email property of the user object.
// echo $user->getInfo(); // Output: John - alice@example.com

// 2. Creating Object
$user = new User("John", "john@example.com");
echo $user->getInfo(); // Output: John - john@example.com

// Exercise 1: Create a class called Car with properties brand and price. Constructor to set both and method to applyDiscount($percent) which returns the price after applying the discount.

class Car {
    public $brand;
    public $price;

    public function __construct($brand, $price) {
        $this->brand = $brand;
        $this->price = $price;
    }

    public function applyDiscount($percent) {
        $discountAmount = ($this->price * $percent ) / 100;
        return $this->price - $discountAmount;
        }
}

$car = new Car("Toyota", 20000);
echo $car->applyDiscount(10); // Output: 18000


// exercise 2: Modify applyDiscount so that if discount is greater than 50% it returns "Invalid discount", otherwise returns new price.

class Car {
    public $brand;
    public $price;

    public function __construct($brand, $price) {
        $this->brand = $brand;
        $this->price = $price;
    }
    public function applyDiscount($percent) {
        if ($percent > 50) {
            return "Invalid discount";
        }
        return $this->price - ($this->price * $percent / 100);
    }
}



// create a class that creates a rectangle and returns area and perimeter of the rectangle.

class Rectangle {
    public $width;
    public $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function area() {
        return $this->width * $this->height;
    }

    public function perimeter() {
        return 2 * ($this->width + $this->height);
    }
}

$r = new Rectangle(5, 10);
$r->area(); // Output: 50
$r->perimeter(); // Output: 30



class BankAccount {
    public $balance;

    public function __construct($balance) {
        $this->balance = $balance;
    }

    public function deposit($amount) {
        $this->balance += $amount;
    }

    public function withdraw($amount) {
        if ($amount > $this->balance) {
            return "Insufficient funds";
        }
        $this->balance -= $amount;
        return $this->balance;
    }

    public function getBalance() {
        return $this->balance;
    }
}

$acc = new BankAccount(100)
$acc->deposit(50); 
$acc->withdraw(30); 
$acc->getBalance(); // Output: 120


