// Admin-specific JS behaviours

document.addEventListener('DOMContentLoaded', () => {
    const rows = document.querySelectorAll('.admin-table tbody tr');

    rows.forEach((row) => {
        row.addEventListener('mouseenter', () => row.classList.add('bg-slate-100'));
        row.addEventListener('mouseleave', () => row.classList.remove('bg-slate-100'));
    });

    const statusCells = document.querySelectorAll('.admin-status-cell');

    statusCells.forEach(cell => {
        if (cell.textContent.trim().toLowerCase() === 'active') {
            cell.classList.add('admin-status-active');
        } else if (cell.textContent.trim().toLowerCase() === 'pending') {
            cell.classList.add('admin-status-pending');
        }
    });

    if (window.jQuery && $.fn.DataTable) {
        $('#kt_datatable_responsive').DataTable({
            responsive: true
        });
    }
});
