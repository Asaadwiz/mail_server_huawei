require ["fileinto"];
# rule:[SPAM]
if header :contains "X-Spam-Level" "*" {
fileinto "Junk";
}
