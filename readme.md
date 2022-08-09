# i3D-API-Client

i3d.net technical challenge.

## Ativities.

| Name         | Done | 
| -----------  | ----------- | 
| Create an Account   | ✓         | 
| Create Client  | ✓         | 
| Implement Models/DTOs | ✓         | 
| Implement Get user Enpoint | ✓         | 
| Implement Get Account API log Endpoint | ✘         | 
| Create script command to fetch account details | ✘        
| Create script command to fetch API logs| ✘         | 
| Save results in database| ✘         | 



## Test

Inside the i3dnet-api-client_fpm container run:

vendor/phpunit/phpunit/phpunit ./test


## Strategy for remaining activities:

Since the Assessment is not finish, I think is necessary to explain my approach for the remaining activities:

-   Get Account API log Endpoint:
    - Add factory for DTOs.
    - Implement method in the client to hit the endpoint.
-   Scripts/commands: Implement a class(a facade perhaps) that will be in charge to boostrap the implementation and instance and inject dependencies.
-   Implement ORM for database population: 
    - Doctrine for instance. 


## Improvements:

Many things can be done to improve the code of course, but I want to mention a few:
- Implement symfony container(or other container component) to improve memory use and manage of dependency injection of course.
- Implement unit test complete in all scenarios and services.
- Implement a configuration interface: in order to have a proper place for parameter like the APIkey and base route. 
- Improve the manage of exception control: In order to make an interpretation of the error details.
- Perhaps some integration tests.



