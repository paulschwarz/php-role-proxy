#RoleProxy

_coding exercise_

##Concept

Here, an `entity` is a POPO with public properties. In the provided examples a `User` (having `name` and `password` 
public properties) is proxied through instances of `Role\User\Friend` and `Role\User\Myself` respectively. 

A _`User` as a `Friend`_ allows read access to `name` and no write access.

A _`User` as a `Myself`_ allows read access to both `name` and `password` and write access to both `name` and `password`.
