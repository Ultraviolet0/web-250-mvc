<?php
// src/Controllers/SalamanderController.php
//
// The Controller receives a request (from the router),
// asks the Model for data, and then chooses a View to display.
require_once __DIR__ . '/../Models/Salamander.php';
class SalamanderController
{
  /**
   * Controller action to show a list of all salamanders.
   */
  public function index(): void
  {
    // 1. Ask the model for all salamanders
    $salamanders = Salamander::all();
    // 2. Load the view and pass the data to it.
    // We do this by simply including the file. The view
    // can now use the $salamanders variable.
    require __DIR__ . '/../Views/salamanders/index.php';
  }

  public function show(): void
  {
    // Validate the query param (?id=...)
    if (!isset($_GET['id']) || !ctype_digit($_GET['id']) || (int)$_GET['id'] <= 0) {
      http_response_code(400);
      echo 'Invalid salamander id.';
      return;
    }

    $id = (int) $_GET['id'];

    // Fetch one salamander (or null if not found)
    $salamander = Salamander::find($id);

    if ($salamander === null) {
      http_response_code(404);
      echo 'Salamander not found.';
      return;
    }

    // Render view (no DB calls in the view)
    require __DIR__ . '/../Views/salamanders/show.php';
  }
}
