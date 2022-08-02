## About this project

Project repo URL: github.com/ekatamel/nula_invoices
Invoices project was made in order to fulfill requirements of the assignment as part of job application process.

The basic functionality includes:

-   Displaying all transactions between customers and suppliers including price
-   Displaying invoice for each transaction
-   Ability to download invoice in PDF

## Tech stack

For the project I used following technologies:

PHP & Laravel:

-   setting up database
-   creating DB migrations
-   defining DB models and relationships
-   seeding the database with customer, supplier and invoice data
-   routing
-   returning HTML (Laravel blade templates)

Databases:

-   database engine: MySQL
-   database administration tool: PHP My Admin
-   Database model:
    ![Database model](/public/db-model.png)
    Model is available at:
    https://dbdiagram.io/d/62e8e5cdf31da965e85f3317

## Project steps

### 1. Definition of database model and migrations

I defined database model and created table for suppliers, customers and invoices. As a table columns for suppliers and customers table I defined attributes available in the entity XML from ARES API and needed for the invoice such as name, ICO, address, zip code etc. For the invoice table I used attributes from Excel file (ICO of the customer, ICO of the supplier, price).

### 2. Seeding the database

#### Customers & Suppliers:

-   I created models for Supplier and Customer
-   I filtered unique ICO values for both customers and suppliers in provided Excel so that I could create unique entities in the tables
-   For each of these ICO numbers I made and API call using "http://wwwinfo.mfcr.cz/cgi-bin/ares/darv_bas.cgi?ico={ICO}" URL, where {ICO} parameter contained actual ICO of the customer/supplier. I decided to use ARES API resourse as it contained all required information and was able to retrieve data for a single entity based on ICO as URL parameter.
-   I parsed XML string into an object using SimpleXMLElement (simplexml_load_string), accessed its values and filled new Customer/Supplier model class objects with these data, e.g.

`$customer_db->name = (string) $el->OF ?? null;`  
`$customer_db->street = (string) $el->AA->NU . ' ' . (($el->AA->CO == '') ? $el->AA->CD : $el->AA->CD . '/' . $el->AA->CO) ?? null;`

-   I looped through all of the customers/suppliers (defined as unique ICO number) using foreach loop and saved customers/suppliers into DB.

#### Invoices:

-   I created model for Invoice and defined relationships between Invoice and Customer/Supplier, so that each invoice could be retrieved with data about the customer/supplier.
-   In provided Excel files, I paired ICO of the customer/supplier with ID of supplier/customer in the database (customers/suppliers table) using VLOOKUP.
-   Then, in every foreach loop iteration of the array, I Created new Invoice model class object, filled it with the data about customer id, supplier id and price and saved to DB.

### 3. Creating routes, controllers and views

**In web.php I defined routes:**

-   to display all transactions (representation of provided Excel file) -> "invoices.index" route
-   to display particular invoice with prefilled information from DB -> "invoices.show" route

**Inside InvoiceController, I created methods, which:**

-   **index** -> retrieves all invoices from DB with eagerly loaded customer/supplier information and returns them in the index.blade.php view
-   **show** -> retrieves the invoice from DB based on ID parameter in the URL and returns the view invoice.blade.php
-   **loadPdf** -> using DOMPDF library, I prepared pdfView.blade.php (identical to invoice.blade.php) view to be downloaded as PDF

**In the views, I display following information:**

-   **index.blade.php** -> table, where each row represents the transaction between customer and supplier + link to display the invoice for this transaction
-   **invoice.blade.php** -> HTML invoice, which is prefilled with known data from DB about customer/supplier identification and the price
-   **pdfView.blade.php** -> in resembles invoice.blade.php view (without download button) and is used to be downloaded as PDF.
-   **main.blade.php** -> used as layout template, which yields some content

### 4. Adding based styling

After all of these steps were done, I created basic styling for the table and invoice.

## Difficulties

The biggest difficulties during the project I had with:

-   XML parsing and accessing its values. Unfortunately, SimpleXMLElement parsing method was returning only attributes, not elements itself. Therefore, I had to find a way to parse and access XML using doc namespaces and children methods.
-   Inline styling of PDF

## Shortcomings and suggestions

As improvements of this project, I can suggest following:

-   Admin could be able to create a new invoice record and choose from existing suppliers/customers.

-   I could make invoice HTML even more interactive with ability to fill-in other details of the invoice (such as email, phone, image, description of the services provided etc.) and to save it to DB, to display or download.

-   In order to create new customer/supplier or expand information about the existing ones known from ARES API, we could have admin interface to create/read/edit/delete customer/suppliers entities. When creating a new customer/supplier, basic information (address, name etc.) could be retrieved automatically using ARES API based on ICO/name and other details (email, phone etc.) could be manually entered and submitted by the admin.

-   I could work on better invoice styling.
