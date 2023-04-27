# **Nusantara Kitchen ERP**
### **Description**
Nusantara Kitchen is an ERP (Enterprise Resource Planning) system specifically designed for managing restaurant and cafe businesses. With Nusantara Kitchen, you can easily and efficiently manage your inventory, orders, menu, employees, and various aspects of your restaurant business.

### **Key Features**
- Inventory and stock management 
- Order and payment management
- Menu management
- Employee management
- Sales and revenue reporting
- Customer database management

## **Getting Started**
### **Prerequisites**
To run Nusantara Kitchen, you will need the following software:
- PHP version 8.1 or higher
- Laravel Framework version 10 or higher
- MySQL or other compatible database management system
### **Installation**
1. Clone the repository:
    ```code
    https://github.com/nhadi44/nusantara-kitchen-laravel.git
    ```
2. Install the dependencies:
   ```code
   composer install
   ```
3. Create a new .env file:
   ```code
    cp .env.example .env
    ```
4. Generate a new application key:
   ```code
    php artisan key:generate
    ```
5. Set up your database by editing the .env file:
   ```code
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nusantara_kitchen
    DB_USERNAME=root
    DB_PASSWORD=
    ```
6. Run the database migrations:
    ```code
     php artisan migrate
     ```
7. Serve the application:
   ```code
    php artisan serve
    ```

## **License**
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## **Contributing**
We welcome contributions from the community! If you have any suggestions or would like to report a bug, please open an issue or submit a pull request.

## **Contact**
For more information about Nusantara Kitchen ERP, please contact us at hadinurhidayat97@hotmail.com.

## **Donations**
If you would like to support us, please consider making a donation to help us cover the costs of developing and maintaining this project. Thank you for your support! :pray:

<!-- donation with buy me a coffe -->
<a href="https://www.buymeacoffee.com/hadinurhid0" target="_blank"><img src="https://cdn.buymeacoffee.com/buttons/v2/default-yellow.png" alt="Buy Me A Coffee" width="150" ></a>