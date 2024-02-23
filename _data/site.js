import dotenv from 'dotenv';
dotenv.config();

const site = {
	url: process.env.URL ? process.env.URL : 'http://localhost:8080',
	defaultDescription: 'Stencil Punks is a non commercial online community devoted to the do it yourself ethic.',
};
export default site;
