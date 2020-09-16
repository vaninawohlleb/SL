<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
  use Partials\Feature;
  use Partials\Category;
  use Partials\RecentProcesses;
  use Partials\RecentProjects;
  use Partials\RecentProducts;
  use Partials\TeamMembers;
  use Partials\RecentOpportunities;
}
