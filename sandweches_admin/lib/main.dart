import 'package:flutter/material.dart';
import 'package:sandweches_admin/pages/Login.dart';
import 'package:sandweches_admin/types/user.dart';

// ignore: camel_case_types
class myApp extends StatelessWidget {
  const myApp({required this.userData});

  final User userData;

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Sandweches',
      theme: ThemeData(
        primarySwatch: Colors.orange,
      ),
      home: Login(userData),
      debugShowCheckedModeBanner: false,
    );
  }
}
