// SweetAlert
// SweetAlert Send approve
const button_send_approve_manager = document.getElementById('send_approve_manager');
if (button_send_approve_manager) {
    button_send_approve_manager.addEventListener('click', e => {
        e.preventDefault();
        AlertMessage('success', 'บันทึกข้อมูลสำเร็จ', 'ระบบทำการส่งสถานะอนุมัติสำเร็จ').then((ok) => {
            window.location = 'Course/CO_Flow.php?category=TSAcademy';

        })
    });
}


// TS ACADEMY
const button_send_approve_tsacademy = document.getElementById('send_approve_tsacademy');
if (button_send_approve_tsacademy) {
    button_send_approve_tsacademy.addEventListener('click', e => {
        e.preventDefault();
        AlertMessage('success', 'บันทึกข้อมูลสำเร็จ', 'ระบบทำการส่งสถานะอนุมัติสำเร็จ').then((ok) => {
            window.location = 'Course/CO_Flow.php?category=Approve';

        })
    });
}


// SweetAlert Send Reject
// manager
const button_send_reject_manager = document.getElementById('send_reject_manager');
if (button_send_reject_manager) {
    button_send_reject_manager.addEventListener('click', e => {
        e.preventDefault();
        AlertMessage('success', 'บันทึกข้อมูลสำเร็จ', 'ระบบทำการส่งสถานะปฎิเสธสำเร็จ').then((ok) => {
            window.location = 'Course/CO_Flow.php?category=Reject&status=Manager';

        })
    });
}


// TS ACADEMY
const button_send_reject_tsacademy = document.getElementById('send_reject_tsacademy');
if (button_send_reject_tsacademy) {
    button_send_reject_tsacademy.addEventListener('click', e => {
        e.preventDefault();
        AlertMessage('success', 'บันทึกข้อมูลสำเร็จ', 'ระบบทำการส่งสถานะปฎิเสธสำเร็จ').then((ok) => {
            window.location = 'Course/CO_Flow.php?category=Reject&status=TSAcademy';

        })
    });
}