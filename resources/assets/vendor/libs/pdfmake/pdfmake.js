// include font file with pdf to make it work
// var pdfMake = require('pdfmake/build/pdfmake.js')
// var pdfFonts = require('pdfmake/build/vfs_fonts.js')
// pdfMake.vfs = pdfFonts.pdfMake.vfs
import * as pdfMake from 'pdfmake/build/pdfmake';
import * as pdfFonts from 'pdfmake/build/vfs_fonts';

pdfMake.vfs = pdfFonts.pdfMake.vfs;
