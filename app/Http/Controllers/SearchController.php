<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{

    public $routes = collect([
        'Administration' => 'admin/admin_master',
        'Accounts' => 'accounts/fee_master',
        'Library' => 'library/library_master',
        'Examination' => 'examination/examination_master',
        'Hostel' => 'hostel/hostel_master',
        'Transport' => 'transport/transport_master',
        'teacher' => 'teacher/teacher_master',
        'Academic Master' => 'admin/master_page',
        'Student' => 'admin/student_page',
        'Staff' => 'admin/hr',
        'Planner' => 'admin/planner_master',
        'Allotments/Mapping' => 'admin/allotment_mapping',
        'Inventory Management' => 'admin/inventory_master',
        'Daily Schedule' => 'admin/daily_schedule_master',
        'Complaint/Suggestion' => 'admin/comm_sugg',
        'User Access' => 'admin/user_access',
        'Create Fee Template' => 'account/fee_template',
        'Segmented Fee Structure' => 'account/fee_category_discount',
        'Create Fee' => 'account/new_fee',
        'Create Bus Fee' => 'accounts/fee_bus',
        'Create Other Fee' => 'accounts/other_fee',
        'Create Hostel Fee' => 'accounts/hostel_fee',
        'Assign Fee' => 'accounts/academic_fee_master',
        'Assign Hostel Fee' => 'accounts/hostel_fee_master',
        'Pay Fee' => 'accounts/pay_fee/create',
        'Cheque Entry' => 'accounts/fee_cheque_master',
        'Due/Deposit Note' => 'accounts/cr_dr_report',
        'Fee Change Request' => 'accounts/fee_change_request',
        'Daily Expense' => 'accounts/daily_expense',
        'Bank Deposite' => 'accounts/bank_deposit',
        'Online Payment' => 'accounts/online_payment',
        'Cash Report' => 'accounts/cash_report',
        'UPI Report' => 'accounts/upi_report',
        'Bank Transfer Report' => 'accounts/bank_transfer_report',
        'Fee Pending Report' => 'accounts/fee_pending_report',
        'Book Genre' => 'library/book_category',
        'Add Books' => 'library/book_master',
        'Magazine/Journals' => 'library/magazine_master',
        'Book Issue/Return' => 'library/issue',
        'Fine Reports Loss' => 'library/fine',
        'Reports' => 'library/book_report',
        'Annual Report' => 'library/annual_book_stock',
        'Barcode Generation' => 'library/barcode_master',
        'Exam' => 'examination/exam_master',
        'Subject Marks' => 'examination/subject_mark',
        'Co-scholastic Grades' => 'examination/CurriculumMaster',
        'Exam Time Table' => 'examination/time_table',
        'Seating Arrangement' => 'examination/arrangement',
        'Exam Duty' => 'examination/exam_duty',
        'Result Preparation' => 'examination/assessment_master',
        'Marks Submission' => 'examination/assessment_submission',
        'Result Approval' => 'examination/approval_assessment_view',
        'Final Result Approval' => 'examination/final_approval_assessment_view',
        'Results' => 'examination/result_list',
        'Subjectwise Report' => 'examination/subject_report',
        'Cumulative Report' => 'examination/marksheet_report',
        'Average Aggregate Report' => 'examination/aggregate_report',
        'Retest Report' => 'examination/retest_report',
        'Class Nominal Report' => 'examination/nominal_report',
        'Scholar Bagde Report' => 'examination/scholar_report',
        '100% Attendance Report' => 'examination/attendance_report',
        'Student Performance' => 'examination/student_performance',
        'Bus Stop' => 'transport/transport_master',
        'Bus Master' => 'transport/bus_master',
        'Bus Expense' => 'transport/expense_master',
        'Service' => 'transport/service_master',
        'Student Bus Report' => 'transport/student_bus_report',
        'Class' => 'admin/class_master',
        'Section' => 'admin/SectionMaster',
        'Stream' => 'admin/StreamMaster',
        'Subject' => 'admin/SubjectMaster',
        'House' => 'admin/HouseMaster',
        'Health & Physical Education' => 'admin/health_physical_education_master',
        'Import Student' => 'admin/ImportStudent',
        'Import Staff' => 'admin/implode_staff',
        'Student Bulk Photo' => 'admin/bulk_student_photo',
        'Department' => 'admin/department_master',
        'Designation' => 'admin/DesignationMaster',
        'Gatepass Generation' => 'admin/school_gatepass',
        'Student ID Card' => 'admin/SchoolId',
        'Staff ID Card' => 'admin/StaffIdCard',
        'Pre-Registration' => 'admin/registration_master',
        'Add Student' => 'admin/new_admission',
        'View/Edit Student' => 'admin/studentList',
        'Sibling Detail' => 'admin/students_with_sibling',
        'Class Attendance' => 'admin/day_student_attendance',
        'Bus Attendance' => 'admin/monthly_bus_attendance',
        'Monthly Class Attendance' => 'admin/student_attendance',
        'Attendance Report' => 'admin/date_student_attendance',
        'Generate Barcode' => 'admin/generate_barcode',
        'Promote Student' => 'admin/promote_student',
        'Student Application' => 'admin/student_application',
        'Applied TC' => 'admin/tc',
        'Apply TC' => 'admin/tc/create',
        'Add New Staff' => 'admin/staff_master/create',
        'View Staff' => 'admin/staff_master',
        'Take Staff Attendance' => 'admin/staff_attendance/create',
        'View Staff Attendance' => 'admin/staff_attendance',
        'Monthly Staff Attendance' => 'admin/monthly_staff_attendance',
        'Homework' => 'admin/homework',
        'Vendor' => 'view_vendor_master/0',
        'Category' => 'category_master/0',
        'Sub-Category' => 'sub_category_master/0',
        'Product' => 'product_master/0',
        'School Layout' => 'wing_master/create/0',
        'Issue Item' => 'issue_item_master/0',
        'Period Master' => 'admin/period_master',
        'Time Table' => 'admin/time_table_master',
        'Teacher Substitution' => 'admin/time_table_substitution',
        'Time Table Report' => 'admin/time_table_group',
    ]);

    public function search_data($parameter)
    {
        return response()->json($this->routes->search($parameter));
    }
}
