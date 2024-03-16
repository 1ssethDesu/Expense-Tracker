<div class="sidebar" style="background-color: #336699;"> <!-- Change the background color here -->
    <nav class="sidebar-nav">
        <ul class="nav">
            @can('user_management_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        {{ trans('cruds.userManagement.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('permission_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                    {{ trans('cruds.permission.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('role_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                    {{ trans('cruds.role.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                    {{ trans('cruds.user.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan

            @can('expense_category_access')
                <li class="nav-item">
                    <a href="{{ route("admin.expense-categories.index") }}" class="nav-link {{ request()->is('admin/expense-categories') || request()->is('admin/expense-categories/*') ? 'active' : '' }}">
                        {{ trans('cruds.expenseCategory.title') }}
                    </a>
                </li>
            @endcan
            @can('income_category_access')
                <li class="nav-item">
                    <a href="{{ route("admin.income-categories.index") }}" class="nav-link {{ request()->is('admin/income-categories') || request()->is('admin/income-categories/*') ? 'active' : '' }}">
                        {{ trans('cruds.incomeCategory.title') }}
                    </a>
                </li>
            @endcan
            @can('expense_access')
                <li class="nav-item">
                    <a href="{{ route("admin.expenses.index") }}" class="nav-link {{ request()->is('admin/expenses') || request()->is('admin/expenses/*') ? 'active' : '' }}">
                        {{ trans('cruds.expense.title') }}
                    </a>
                </li>
            @endcan
            @can('income_access')
                <li class="nav-item">
                    <a href="{{ route("admin.incomes.index") }}" class="nav-link {{ request()->is('admin/incomes') || request()->is('admin/incomes/*') ? 'active' : '' }}">
                        {{ trans('cruds.income.title') }}
                    </a>
                </li>
            @endcan
            @can('expense_report_access')
                <li class="nav-item">
                    <a href="{{ route("admin.expense-reports.index") }}" class="nav-link {{ request()->is('admin/expense-reports') || request()->is('admin/expense-reports/*') ? 'active' : '' }}">
                        {{ trans('cruds.expenseReport.title') }}
                    </a>
                </li>
            @endcan
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer d-lg-none" type="button"></button> <!-- Hide the button on large screens -->
</div>

