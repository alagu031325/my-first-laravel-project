## php artisan commands

1. `php artisan route:list` - to list all registered routes
2. `php artisan make:controller` **name of the controller** - to create a new controller for a view
3. `php artisan make:controller` **name of the resource controller** -r -> -r - represent resource controller creation flag
4. `php artisan make:controller `**name of the single action controller** --invokable
5. `php artisan make:request LoginRequest` - to create a new request class for a route
6. `php artisan tinker `- Enters into shell mode - through which we can execute php commands - execute `DB::connection()->getPDO();` command to check the DB connection
7. php artisan migrations - used to create database table `db name should start with create_` and share the schema among the team working for the same project
8. `php artisan make:migration create\_<table_name(plural)>\_table`
9. `php artisan migrate` - to migrate the table into the database - we can add custom fields into the migration file
10. `php artisan migrate:reset` - all tables will be deleted from DB - we can create tables again by running migrate command - but all previous data will be lost
11. `php artisan migrate:rollback` - previous action will be rollbacked
12. `php artisan migrate --path=/database/migrations/2024_10_25_134255_create_test_table.php(file name)` - migrate only a single file
13. `php artisan migrate:refresh` - drops all table and recreates the same table with updated/added fields - this will delete all previous data
14. `php artisan make:migration add\_<tablename>\_table --table=<tablename>` - To overcome this issue of data loss we can create another file with newly added fields and then migrate that new file alone
15. `php artisan make:seeder <seeder_name>` - to generate fake data for testing purpose
16. `php artisan db:seed` - to run the created seeder
17. `php artisan make:factory PostFactory` - To create a factory for the Post Table
18. `php artisan make:model Post` - To create a Model for the Post Table
19. `php artisan migrate:fresh` -Drop all tables and create the tables - we lose all data
20. `php artisan make:model Tag -mf` - To create a tag model along with the migration and factory files
21. `php artisan make:migration create_post_tag_table --create=post_tag` - To create a pivot table
22. `php artisan migrate:status` - to see the migrate status
23. `php artisan storage:link` - used to create symlink between public folder and storage folder
24.

## Relations

### one to one relations

-   One record in a table refers to a single row in another table - one to one relationships
-
