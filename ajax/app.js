$('#mySelect').select2({
    minimumInputLength: 3, // Tìm kiếm cần ít nhất 3 ký tự
    ajax: {
        url: '/path/to/search-endpoint',
        dataType: 'json',
        processResults: function (data) {
            return {
                results: data.items // Dữ liệu trả về từ endpoint
            };
        }
    }
});
$('#mySelect').select2({
    ajax: {
        url: '/path/to/ajax-endpoint',
        dataType: 'json',
        processResults: function (data) {
            return {
                results: data.items // Dữ liệu trả về từ endpoint
            };
        }
    }
});