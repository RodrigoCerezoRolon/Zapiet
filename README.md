<h1>Challange Zapiet</h1>

<h3>Steps to start the project, create and update TodoList </h3>

<ol>
    <li> Execute command php artisan make:migration</li>
    <li> Execute command php artisan db:seed --class=TodoItemSeeder</li>
    <li> Execute command php artisan update-status</li>
</ol>

<h3>Endpoints URL</h3>

<ul>
    <li> GET endpoint URL:
        http://127.0.0.1:8000/api/todoList
    </li>
    <li>
        POST URL:
        http://127.0.0.1:8000/api/updateTodo/{id}
    </li>
</ul>
