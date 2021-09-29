"use strict";

$("[data-checkboxes]").each(function () {
  var me = $(this),
    group = me.data("checkboxes"),
    role = me.data("checkbox-role");

  me.change(function () {
    var all = $(
        '[data-checkboxes="' + group + '"]:not([data-checkbox-role="dad"])'
      ),
      checked = $(
        '[data-checkboxes="' +
          group +
          '"]:not([data-checkbox-role="dad"]):checked'
      ),
      dad = $('[data-checkboxes="' + group + '"][data-checkbox-role="dad"]'),
      total = all.length,
      checked_length = checked.length;

    if (role == "dad") {
      if (me.is(":checked")) {
        all.prop("checked", true);
      } else {
        all.prop("checked", false);
      }
    } else {
      if (checked_length >= total) {
        dad.prop("checked", true);
      } else {
        dad.prop("checked", false);
      }
    }
  });
});

$("#tableNormal").dataTable({});
$("#table-1").dataTable({
  columnDefs: [{ sortable: false, targets: [3, 4, 5, 6, 7, 8] }],
});
$("#table-satuan").dataTable({
  columnDefs: [{ sortable: false, targets: [1, 2, 3] }],
});
$("#table-user").dataTable({
  columnDefs: [{ sortable: false, targets: [1, 3, 4] }],
});
$("#table-barang").dataTable({
  columnDefs: [{ sortable: false, targets: [1, 4, 5, 6] }],
});
$("#table-barang2").dataTable({
  columnDefs: [{ sortable: false, targets: [3, 4] }],
});
