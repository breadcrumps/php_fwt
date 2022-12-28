<?php

require "core/function.php";
App::bind("config", require "config.php");
App::bind("database", new QueryBuilder(Connection::make(App::get("config")['database'])));
App::get("database");
