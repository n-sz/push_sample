function push() {
    Push.create($("#action_title").val(), {
        body: $("#action_body").val(),
        timeout: 4000,
        onClick: function() {
            location.href = 'http://example.com';
            this.close();
        }
    });
}