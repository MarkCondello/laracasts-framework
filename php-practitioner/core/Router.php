<?php
class Router
{
    protected $routes = [];

    public function define($routes)
    {
        $this->routes = $routes;
    }

    public function direct($uri)
    {
        //check for route key against the registered routes
        if(array_key_exists($uri, $this->routes))
        {
            return $this->routes[$uri];
        }

        throw new Exception("No route found for this uri.");
    }


}