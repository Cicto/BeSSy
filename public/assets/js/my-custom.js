let filterObject = async(object, filterKey, filterValue) => {
    let filteredObj = object.filter(obj => obj[filterKey] == filterValue);
    return filteredObj;
}

let sendToForm = async(object) => {
    $.each(object, (key, val) => {
        $('#' + key).val(val);
    });
    return true;
}

let confirm = (title, message, icon, url, type, formData, callBack) => {
    Swal.fire({
        icon: icon,
        iconColor: 'var(--kt-white)',
        title: '<span class = "fw-semibold fs-1">CONFIRM</span>',
        html: '<span class = "text-gray-600">'+message+'</span>',
        background: `var(--kt-white)`,
        customClass: {
            icon: 'shadow-md m-0 fs-2 mt-5',
            confirmButton: "btn btn-warning",
            cancelButton: 'btn btn-light-warning',
            header: 'p-0 m-0 bg-warning pt-7 pb-5',
            title: 'w-100 m-0 text-white flex-center pt-3 pb-10',
            loader: 'pt-20',
            content: 'pt-5',
            popup: 'pb-7',
        },
        focusConfirm: false,
        buttonsStyling: false,
        showCancelButton: true,
        confirmButtonText: 'Yes, proceed.',
    }).then((result) => {
        if(result.isConfirmed){
            if(url != false){
                ajaxRequest(url, type, formData, callBack);
            }
            else{
                callBack({
                    error: false,
                    message: 'Action is confirmed!',
                    data: false
                });
            }
            
        }
    })
}

let successAlert = (title, message, icon) => {
    Swal.fire({
        icon: icon,
        iconColor: 'var(--kt-white)',
        iconHtml: `<span class="svg-icon svg-icon-muted svg-icon-3hx text-white"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path opacity="0.5" d="M12.8956 13.4982L10.7949 11.2651C10.2697 10.7068 9.38251 10.7068 8.85731 11.2651C8.37559 11.7772 8.37559 12.5757 8.85731 13.0878L12.7499 17.2257C13.1448 17.6455 13.8118 17.6455 14.2066 17.2257L21.1427 9.85252C21.6244 9.34044 21.6244 8.54191 21.1427 8.02984C20.6175 7.47154 19.7303 7.47154 19.2051 8.02984L14.061 13.4982C13.7451 13.834 13.2115 13.834 12.8956 13.4982Z" fill="currentColor"/>
        <path d="M7.89557 13.4982L5.79487 11.2651C5.26967 10.7068 4.38251 10.7068 3.85731 11.2651C3.37559 11.7772 3.37559 12.5757 3.85731 13.0878L7.74989 17.2257C8.14476 17.6455 8.81176 17.6455 9.20663 17.2257L16.1427 9.85252C16.6244 9.34044 16.6244 8.54191 16.1427 8.02984C15.6175 7.47154 14.7303 7.47154 14.2051 8.02984L9.06096 13.4982C8.74506 13.834 8.21146 13.834 7.89557 13.4982Z" fill="currentColor"/>
        </svg>
        </span>`,
        title: '<span class = "fw-semibold fs-1">SUCCESS</span>',
        html: '<span class = "text-gray-600">'+message+'</span>',
        background: `var(--kt-white)`,
        customClass: {
            icon: 'shadow-md m-0 fs-2 mt-5',
            confirmButton: "btn btn-success w-50",
            header: 'p-0 m-0 bg-success pt-7 pb-5',
            title: 'w-100 m-0 text-white flex-center pt-3 pb-10',
            loader: 'pt-20',
            content: 'pt-5',
            popup: 'pb-7',
        },
        focusConfirm: false,
        buttonsStyling: false,
    });
}

let errorAlert = (title, message, icon) => {
    Swal.fire({
        icon: icon,
        iconColor: 'var(--kt-white)',
        title: '<span class = "fw-semibold fs-1">ERROR</span>',
        html: '<span class = "text-gray-600">'+message+'</span>',
        background: `var(--kt-white)`,
        customClass: {
            icon: 'shadow-md m-0 fs-2 mt-5',
            confirmButton: "btn btn-danger w-50",
            header: 'p-0 m-0 bg-danger pt-7 pb-5',
            title: 'w-100 m-0 text-white flex-center pt-3 pb-10',
            loader: 'pt-20',
            content: 'pt-5',
            popup: 'pb-7',
        },
        focusConfirm: false,
        buttonsStyling: false,
    });
}

let ajaxRequest = (url, type, formData, callBack) => {
    $.ajax({
        url: url,
        type: type,
        dataType: 'json',
        data: formData,
        success: (data) => {
            callBack(data);
        },
        error: (error) => {
            return error;
        }
    });
}

// DATATABLES BUTTONS HOOK START
function dataTablesButtonsHooks(tableElement){
    let buttons = new $.fn.dataTable.Buttons(tableElement, {
        buttons: [
            {
                extend: 'copyHtml5',
                title: 'Data Copied'
            },
            {
                extend: 'excelHtml5',
                title: 'Excel Report'
            },
            {
                extend: 'csvHtml5',
                title: 'CSV Report'
            },
            {
                extend: 'pdfHtml5',
                title: 'PDF Report'
            }
        ]
    }).container().appendTo($('#dataTableButtonsHook'));
    
    const exportButtons = document.querySelectorAll('#dataTableExportMenu [data-kt-export]');
    
    exportButtons.forEach(exportButton => {
        exportButton.addEventListener('click', e => {
            e.preventDefault();
    
            // Get clicked export value
            const exportValue = e.target.getAttribute('data-kt-export');
            const target = document.querySelector('.dt-buttons .buttons-' + exportValue);
    
            // Trigger click event on hidden datatable export buttons
            target.click();
        });
    });
}

// DATATABLES BUTTONS HOOK START