const { get } = require("http");

get("http://localhost/sse/messages", (response) => {
    response.on("data", (data) => {
        console.info(data.toString());
    });
    response.on("end", () => {
        console.info("end");
    });
    response.on("close", () => {
        console.info("close");
    });
});

// TODO: Reconnect
