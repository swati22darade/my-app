<?php 
namespace App\GraphQL\Queries;

use App\Models\User;
use Rebing\GraphQL\Support\Query;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;

class UsersQuery extends Query
{
    protected $attributes = [
        'name' => 'users'
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('User'));
    }

    public function resolve($root, $args)
    {
        return User::all();
    }
}
