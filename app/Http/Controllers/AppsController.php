<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
class AppsController extends Controller
{
    /**
     * Display a chat view
     */
    public function chat()
    {
        $breadcrumbsItems = [
            [
                'name' => 'Chat',
                'url' => '/chat',
                'active' => true
            ],

        ];
        return view('apps.chat', [
            'pageTitle' => 'Chat',
            'breadcrumbItems' => $breadcrumbsItems,
        ]);
    }


    /**
     * Display a email view
     */
    public function email()
    {
        $breadcrumbsItems = [
            [
                'name' => 'Email',
                'url' => '/email',
                'active' => true
            ],

        ];
        return view('apps.email', [
            'pageTitle' => 'Email',
            'breadcrumbItems' => $breadcrumbsItems,
        ]);
    }

    /**
     * Display a kanban view
     */
    public function kanban()
    {
        $breadcrumbsItems = [
            [
                'name' => 'Kanban',
                'url' => '/kanban',
                'active' => true
            ],
        ];
        return view('apps.kanban', [
            'pageTitle' => 'Kanban ',
            'breadcrumbItems' => $breadcrumbsItems,
        ]);
    }


    /**
     * Display a Calender view
     */
    public function calender()
    {
        $breadcrumbsItems = [
            [
                'name' => 'Calender',
                'url' => '/calender',
                'active' => true
            ],
        ];
        return view('apps.calender', [
            'pageTitle' => 'Calender ',
            'breadcrumbItems' => $breadcrumbsItems,
        ]);
    }


    /**
     * Display a todo view
     */
    public function todo()
    {
        $breadcrumbsItems = [
            [
                'name' => 'Todo',
                'url' => '/todo',
                'active' => true
            ],
        ];
        return view('apps.todo', [
            'pageTitle' => 'Todo ',
            'breadcrumbItems' => $breadcrumbsItems,
        ]);
    }

    /**
     * Display a projects view
     */
    public function projects()
    {
        $breadcrumbsItems = [
            [
                'name' => 'Projects',
                'url' => '/projects',
                'active' => true
            ],
        ];
        return view('apps.projects', [
            'pageTitle' => 'Projects ',
            'breadcrumbItems' => $breadcrumbsItems,
        ]);
    }

    /**
     * Display a project details view
     */
    public function projectDetails()
    {
        $breadcrumbsItems = [
            [
                'name' => 'Project Details',
                'url' => '/project-details',
                'active' => true
            ],
        ];
        return view('apps.project-details', [
            'pageTitle' => 'Project Details ',
            'breadcrumbItems' => $breadcrumbsItems,
        ]);
    }
    public function PendingOrders()
    {
        $datas = Order::all();
        $breadcrumbsItems = [
            [
                'name' => 'Pending Order',
                'url' => '/Pending-Order',
                'active' => true
            ],
        ];
        return view('apps.Pending-Order', [
            'pageTitle' => 'Pending Order ',
            'breadcrumbItems' => $breadcrumbsItems,
        ],compact('datas'));
    }

    public function HoldOrders()
    {
        $breadcrumbsItems = [
            [
                'name' => 'Hold Order',
                'url' => '/Hold-Order',
                'active' => true
            ],
        ];
        return view('apps.Hold-Order', [
            'pageTitle' => 'Hold Order ',
            'breadcrumbItems' => $breadcrumbsItems,
        ]);
    }

    public function ConfrimOrders()
    {
        $breadcrumbsItems = [
            [
                'name' => 'Confrim Order',
                'url' => '/Confrim-Order',
                'active' => true
            ],
        ];
        return view('apps.Confrim-Order', [
            'pageTitle' => 'Confrim Order ',
            'breadcrumbItems' => $breadcrumbsItems,
        ]);
    }

    public function ProcessingOrders()
    {
        $breadcrumbsItems = [
            [
                'name' => 'Processing Order',
                'url' => '/Processing-Order',
                'active' => true
            ],
        ];
        return view('apps.Processing-Order', [
            'pageTitle' => 'Processing Order ',
            'breadcrumbItems' => $breadcrumbsItems,
        ]);
    }

    public function DeliveredOrders()
    {
        $breadcrumbsItems = [
            [
                'name' => 'Delivered Order',
                'url' => '/Delivered-Order',
                'active' => true
            ],
        ];
        return view('apps.Delivered-Order', [
            'pageTitle' => 'Delivered Order ',
            'breadcrumbItems' => $breadcrumbsItems,
        ]);
    }

    public function CancelOrders()
    {
        $breadcrumbsItems = [
            [
                'name' => 'Cancel Order',
                'url' => '/Cancel-Order',
                'active' => true
            ],
        ];
        return view('apps.Cancel-Order', [
            'pageTitle' => 'Cancel Order ',
            'breadcrumbItems' => $breadcrumbsItems,
        ]);
    }


    public function ReturnOrders()
    {
        $breadcrumbsItems = [
            [
                'name' => 'Return Order',
                'url' => '/Return-Order',
                'active' => true
            ],
        ];
        return view('apps.Return-Order', [
            'pageTitle' => 'Return Order ',
            'breadcrumbItems' => $breadcrumbsItems,
        ]);
    }

    public function ExpenseCatagorys()
    {
        $breadcrumbsItems = [
            [
                'name' => 'Expense Catagory',
                'url' => '/Expense Catagory',
                'active' => true
            ],
        ];
        return view('apps.Expense-Catagory', [
            'pageTitle' => 'Expense Catagory ',
            'breadcrumbItems' => $breadcrumbsItems,
        ]);
    }

    public function Expanses()
    {
        $breadcrumbsItems = [
            [
                'name' => 'Expanse',
                'url' => '/Expanse',
                'active' => true
            ],
        ];
        return view('apps.Expanse', [
            'pageTitle' => 'Expanse',
            'breadcrumbItems' => $breadcrumbsItems,
        ]);
    }


    public function Products()
    {
        $breadcrumbsItems = [
            [
                'name' => 'Product',
                'url' => '/Product',
                'active' => true
            ],
        ];
        return view('apps.Product', [
            'pageTitle' => 'Product',
            'breadcrumbItems' => $breadcrumbsItems,
        ]);
    }

    public function Customers()
    {
        $breadcrumbsItems = [
            [
                'name' => 'Customer',
                'url' => '/Customer',
                'active' => true
            ],
        ];
        return view('apps.Customer', [
            'pageTitle' => 'Customer',
            'breadcrumbItems' => $breadcrumbsItems,
        ]);
    }

    public function Accounts()
    {
        $breadcrumbsItems = [
            [
                'name' => 'Account',
                'url' => '/Account',
                'active' => true
            ],
        ];
        return view('apps.Account', [
            'pageTitle' => 'Account',
            'breadcrumbItems' => $breadcrumbsItems,
        ]);
    }


}
