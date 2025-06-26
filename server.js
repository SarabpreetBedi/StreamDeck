const express = require('express');
const path = require('path');
const app = express();
const PORT = process.env.PORT || 3000;

// ✅ Serve sitemap.xml from project root
app.get('/sitemap.xml', (req, res) => {
  res.sendFile(path.join(__dirname, 'sitemap.xml'));
});

// ✅ Optional: block non-Google bots (still allow Googlebot)
app.use((req, res, next) => {
  const ua = req.headers['user-agent'] || '';
  if (/bot|crawler|spider|crawling/i.test(ua) && !/Googlebot/i.test(ua)) {
    return res.status(403).send('Blocked');
  }
  next();
});

// ✅ Serve static assets from the current folder or any other you use
app.use(express.static(path.join(__dirname)));

app.listen(PORT, () => console.log(`Server running on port ${PORT}`));
