$(document).ready(function () {
    $("#employeeTable").DataTable({
        pagingType: "full_numbers",
        oLanguage: {
            oPaginate: {
                // customize first with fontawesome and style it
                sFirst: `
                <i class="fas fa-angle-double-left" style="font-size: 1rem; padding: .2rem .1rem;"></i>
                `,
                sPrevious: `
                    <i class="fas fa-chevron-left"></i>
                    `,
                sNext: '<i class="fas fa-chevron-right"></i>',
                sLast: `
                <i class="fas fa-angle-double-right" style="font-size: 1rem; padding: .2rem .1rem;"></i>
                `,
            },
            sInfo: "Showing page _PAGE_ of _PAGES_",
            sSearch:
                '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
            sSearchPlaceholder: "Search...",
            sLengthMenu: "Results :  _MENU_",
        },
        stripeClasses: [],
        lengthMenu: [7, 10, 20, 50],
        pageLength: 7,
    });
});
