require("./bootstrap");

var moment = require("moment");

app.listen(3000, () => {
    let data = moment().format("DD/MM/YYYY");
});
