<?php
    require_once 'Company.php';
    require_once 'Department.php';
    require_once 'Employee.php';
    $company = new Company;
    $company->setCompanyName("Digdaya Olah Teknologi Indonesia");
    $department = new Department;
    $department->setDepartmentName("Quality Assurance Tester");
    $employee = new Employee;
    $employee->setEmployeeName("Johannes Grant");
    $employee->title = "Internship";
    $employee->salary = 5000;
    echo "<b>Company</b>: ".$company->getCompanyName();
    echo '</br>';
    echo "<b>Department</b>: ".$department->getDepartmentName();
    echo '</br>';
    echo $employee->getEmployeeProfile();
    echo '</br>';
    echo 'Salary in 40 Days USD'.$employee->getEmployeeMonthlySalary(40);
