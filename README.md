# Laravel 2023 SDG Intermediate Task

This project is a simple Laravel task API that allows users to create, retrieve, update, and delete tasks. The API is built using Laravel and SQlite for data storage.

## Prerequisites

- PHP
- Laravel Framework
- Composer

## Installation

1. Clone the repository and navigate to the project root directory:

   ```shell
   git clone https://github.com/InventorsDev/Laravel_SDG_2023_Beginners_Challenge.git

2. Install dependencies using Composer:

   ```shell
   composer install

3. Set up the environment:

   ```shell
   Navigate to database folder create a file named challengedb.sqlite
   Copy the .env.example file and rename it to .env.
   Configure the necessary environment variables in the .env file.
   Set the following:
   DB_CONNECTION=sqlite
   DB_HOST=127.0.0.1
   DB_PORT=3306

## Task 1 Instructions

You have been provided with the apiResource endpoints for basic CRUD and also the unit test which can be found in `your_project_directory\tests\Feature\TaskControllerTest.php` .
Your work is to perform the following:

- Create a TaskController then ensure to link it to your api.php file to work well
- Create all the functions needed by for the test to run perfectly
- Run your test and ensure it works perfectly
- Use a tool such as Postman or Insomnia to test the API endpoints.


## Task 2 Instructions
Complete the two question in the controller/Api/AlgorithmController. The getMaxSum and uniqueChars function
### Question 1 - getMaxSum
        Write a function called getMaxSum that takes an array of integers as input and returns the maximum sum of any contiguous subarray of the given array. If the array is empty or contains only negative integers, the function should return 0. The getMaxSum function takes an array of integers as input and returns the maximum sum of any contiguous subarray of the given array. If the array is empty or contains only negative integers, the function should return 0.

### **Example Input and Output**
##### Example 1

Input

    `getMaxSum([1, -3, 2, 1, -1]);`

Output

    `3`
### Question 2 - uniqueChars
        Complete the uniqueChars that takes a string as input and returns a new string containing only the unique characters in the input string, in the order that they first appear. If the input string is empty or contains only whitespaces, the function should return an empty string.

// For example, if the input string is "hello world", the function should return "helo wrd".

### **Example Input and Output**
##### Example 1

Input

     `uniqueChars("hello world");`

Output

   `"helo wrd"`
##### Example 2

Input

     `uniqueChars("");`

Output

   `""`


## Tests

    Run php artisan test

    A successful test should look like this in your Vs code terminal

 ![A successful test should look like this in your Vs code terminal](public\Screenshottest.png)


