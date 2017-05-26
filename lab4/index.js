import express from 'express';
import bodyParser from 'body-parser';
import data from './data';

const app = express();

app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true }));

app.get("/", (req, res) => {
  const query = (req.query.query || '').toLowerCase();
  const result = data.filter(item => item.toLowerCase().includes(query));

  res.setHeader('Access-Control-Allow-Origin', '*');
  res.setHeader('Access-Control-Allow-Methods', 'GET, POST, OPTIONS, PUT, PATCH, DELETE');
  res.setHeader('Access-Control-Allow-Headers', 'X-Requested-With,contenttype');
  res.setHeader('Access-Control-Allow-Credentials', true);
  res.send({
    query,
    found: result,
  });
});

app.listen(80, () => console.log('Server started'));
