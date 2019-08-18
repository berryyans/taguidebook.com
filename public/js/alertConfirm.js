function confirmDelete(itemId,url) {
    alertify.confirm("Are you sure delete this data?", function (e) {
        if (e) {
            window.location.href = url + itemId;
        }
    }).setHeader('Notification');
}