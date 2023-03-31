# Pin Generating Package 

# This will generate the 4 digit pin which is used to open the door.



# INSTALLATION GUIDE 

# Step 1 

Open a terminal and navigate to the root directory of your Laravel project.

# Step 2 

Run the following command to install the package via Composer:


# composer require ananth/pingenerator


Once the package is installed, Laravel will automatically detect it and register its service provider.


# Step 3 

You can now use the package in your Laravel application. To generate a PIN, you can create an instance of the PinGenerate class and call its generator() method, like shown below:


# use Ananth\PinGenerator;

# $generator = new PinGenerator();

# $pin = $generator->generatePin();

# OR

You can directly go to this link http://localhost:8000/pingenerator in your browser.
