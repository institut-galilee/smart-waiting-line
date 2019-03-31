/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package javaapplication1;
import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;

import com.google.zxing.BarcodeFormat;
import com.google.zxing.WriterException;
import com.google.zxing.client.j2se.MatrixToImageWriter;
import com.google.zxing.common.BitMatrix;
import com.google.zxing.qrcode.QRCodeWriter;

/**
 *
 * @author Ahlam
 */
public class SimpleQrcodeGenerator {
    protected static String data ;
       public SimpleQrcodeGenerator (String data){
        SimpleQrcodeGenerator.data=data;
    }
    protected static BitMatrix generateMatrix(final String data, final int size) throws WriterException {
        final BitMatrix bitMatrix = new QRCodeWriter().encode(data, BarcodeFormat.QR_CODE, size, size);
        return bitMatrix;
    }
    

 
    protected static void writeImage(final String outputFileName, final String imageFormat, final BitMatrix bitMatrix) throws FileNotFoundException,
            IOException {
        try (FileOutputStream fileOutputStream = new FileOutputStream(new File(outputFileName))) {
            MatrixToImageWriter.writeToStream(bitMatrix, imageFormat, fileOutputStream);
        }
    }
 
}
    

