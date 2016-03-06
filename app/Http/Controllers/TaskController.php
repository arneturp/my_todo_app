<?php
namespace App\Http\Controllers;
use \App\Task;
use Illuminate\Http\Request;

use App\Http\Requests;

class TaskController extends Controller
{
   // Index
   public function index()
   {
      $tasks = Task::all();
      return view('tasks.index')->with('tasks', $tasks);
   }

   // New
   public function new()
   {
      return view('tasks.new');
   }
   // Create
   public function create(Request $request)
   {
      // TODO: Validation
      $task = new Task;
      $task->name = $request->name;
      $task->description = $request->description;
      $task->save();

      // Return to home
      return redirect('/');
   }

   // Delete
   public function delete(Task $task)
   {

      $task->delete();

      return redirect('/');

   }
}
